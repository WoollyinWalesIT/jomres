
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
0
0
0
0
5
s
e
t
_
s
e
a
r
c
h
_
s
e
l
e
c
t
i
o
n
s

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
S
T
A
R
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
s
t
a
r
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
 
=
 
a
r
r
a
y
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
s
t
a
r
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
s
t
a
r
s
'
]
 
=
 
$
s
t
a
r
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
P
r
i
c
e
 
r
a
n
g
e
s
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
'
,
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
'
,
 
0
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
r
i
c
e
r
a
n
g
e
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
p
r
i
c
e
r
a
n
g
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
r
a
n
g
e
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
r
i
c
e
r
a
n
g
e
s
 
a
s
 
$
r
a
n
g
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
p
r
i
c
e
r
a
n
g
e
s
'
]
[
]
 
=
 
$
r
a
n
g
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
-
'
,
 
$
r
a
n
g
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
r
a
n
g
e
s
[
]
 
=
 
(
i
n
t
)
 
$
b
a
n
g
[
0
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
r
a
n
g
e
s
[
]
 
=
 
(
i
n
t
)
 
$
b
a
n
g
[
1
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
 
=
 
m
i
n
(
$
a
l
l
_
r
a
n
g
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
 
=
 
m
a
x
(
$
a
l
l
_
r
a
n
g
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
'
]
 
=
 
$
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
'
]
 
=
 
$
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
F
E
A
T
U
R
E
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
_
u
i
d
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
f
e
a
t
u
r
e
_
u
i
d
s
'
]
 
=
 
$
f
e
a
t
u
r
e
_
u
i
d
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
C
O
U
N
T
R
I
E
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
c
o
u
n
t
r
i
e
s
'
 
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
c
o
u
n
t
r
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
c
o
u
n
t
r
i
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
i
e
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
c
o
u
n
t
r
i
e
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
i
e
s
 
=
 
a
r
r
a
y
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
c
o
u
n
t
r
y
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
c
o
u
n
t
r
i
e
s
'
]
 
=
 
$
c
o
u
n
t
r
i
e
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
R
E
G
I
O
N
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
e
g
i
o
n
s
'
 
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
e
g
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
e
g
i
o
n
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
e
g
i
o
n
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
s
 
=
 
a
r
r
a
y
(
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
e
g
i
o
n
'
,
 
'
'
)
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
r
e
g
i
o
n
s
'
]
 
=
 
$
r
e
g
i
o
n
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
T
O
W
N
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
t
o
w
n
s
'
 
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
t
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
t
o
w
n
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
t
o
w
n
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
s
 
=
 
a
r
r
a
y
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
t
o
w
n
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
t
o
w
n
s
'
]
 
=
 
$
t
o
w
n
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
R
O
O
M
 
T
Y
P
E
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
_
u
i
d
s
'
 
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
y
p
e
_
u
i
d
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
o
o
m
_
t
y
p
e
_
u
i
d
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
y
p
e
_
u
i
d
s
 
=
 
a
r
r
a
y
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
o
o
m
_
t
y
p
e
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
r
o
o
m
_
t
y
p
e
_
u
i
d
s
'
]
 
=
 
$
r
o
o
m
_
t
y
p
e
_
u
i
d
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
P
R
O
P
E
R
T
Y
 
T
Y
P
E
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
p
r
o
p
e
r
t
y
_
t
y
p
e
_
u
i
d
s
'
 
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
p
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
t
y
p
e
_
u
i
d
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
r
o
p
e
r
t
y
_
t
y
p
e
_
u
i
d
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
t
y
p
e
_
u
i
d
s
 
=
 
a
r
r
a
y
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
t
y
p
e
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
p
r
o
p
e
r
t
y
_
t
y
p
e
_
u
i
d
s
'
]
 
=
 
$
p
r
o
p
e
r
t
y
_
t
y
p
e
_
u
i
d
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
G
U
E
S
T
 
N
U
M
B
E
R
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
g
u
e
s
t
n
u
m
b
e
r
s
'
 
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
g
u
e
s
t
n
u
m
b
e
r
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
g
u
e
s
t
n
u
m
b
e
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
n
u
m
b
e
r
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
g
u
e
s
t
n
u
m
b
e
r
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
n
u
m
b
e
r
s
 
=
 
a
r
r
a
y
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
g
u
e
s
t
n
u
m
b
e
r
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
g
u
e
s
t
n
u
m
b
e
r
s
'
]
 
=
 
$
g
u
e
s
t
n
u
m
b
e
r
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
D
A
T
E
S
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
a
r
r
i
v
a
l
D
a
t
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
r
r
i
v
a
l
D
a
t
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
=
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


/
*
*

 
*
 
M
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

