
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
1
6
0
0
0
p
u
r
c
h
a
s
e
_
p
l
u
g
i
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
k
e
y
_
v
a
l
i
d
a
t
i
o
n
 
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
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
'
)
;

	
	
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
-
>
c
h
e
c
k
_
l
i
c
e
n
s
e
_
k
e
y
(
t
r
u
e
)
;
 
/
/
o
n
l
y
 
n
e
e
d
e
d
 
i
f
 
w
e
 
w
a
n
t
 
t
o
 
f
o
r
c
e
 
a
 
r
e
c
h
e
c
k

 
 
 
 
 
 
 
 
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
-
>
r
e
m
o
v
e
_
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
_
f
i
l
e
(
)
;


 
 
 
 
 
 
 
 
$
i
t
e
m
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
i
t
e
m
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
t
o
t
a
l
 
=
 
(
f
l
o
a
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
t
o
t
a
l
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
u
s
e
r
n
a
m
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
u
s
e
r
n
a
m
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
p
a
s
s
w
o
r
d
 
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
a
s
s
w
o
r
d
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
u
s
e
r
n
a
m
e
 
=
=
 
'
'
 
|
|
 
$
p
a
s
s
w
o
r
d
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
"
S
o
r
r
y
,
 
y
o
u
 
d
i
d
n
'
t
 
e
n
t
e
r
 
y
o
u
r
 
u
s
e
r
n
a
m
e
 
a
n
d
/
o
r
 
y
o
u
r
 
p
a
s
s
w
o
r
d
.
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
 
=
 
'
p
u
r
c
h
a
s
e
_
f
a
i
l
u
r
e
.
h
t
m
l
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
s
a
v
e
S
i
t
e
C
o
n
f
i
g
(
a
r
r
a
y
(
'
l
i
c
e
n
s
e
_
s
e
r
v
e
r
_
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
s
e
r
n
a
m
e
,
 
'
l
i
c
e
n
s
e
_
s
e
r
v
e
r
_
p
a
s
s
w
o
r
d
'
 
=
>
 
$
p
a
s
s
w
o
r
d
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
 
=
 
'
r
e
q
u
e
s
t
=
c
r
e
a
t
e
_
i
n
v
o
i
c
e
&
u
s
e
r
n
a
m
e
=
'
.
$
u
s
e
r
n
a
m
e
.
'
&
p
a
s
s
w
o
r
d
=
'
.
$
p
a
s
s
w
o
r
d
.
'
&
i
t
e
m
s
=
'
.
$
i
t
e
m
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
q
u
e
r
y
_
s
h
o
p
(
$
r
e
q
u
e
s
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
p
o
n
s
e
-
>
s
u
c
c
e
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
o
t
a
l
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
'
T
h
a
n
k
 
y
o
u
 
f
o
r
 
y
o
u
r
 
r
e
q
u
e
s
t
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
(
s
)
 
y
o
u
 
r
e
q
u
e
s
t
e
d
 
t
h
r
o
u
g
h
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
'
T
h
a
n
k
 
y
o
u
 
f
o
r
 
y
o
u
r
 
p
u
r
c
h
a
s
e
,
 
a
 
l
i
n
k
 
t
o
 
t
h
e
 
i
n
v
o
i
c
e
 
h
a
s
 
b
e
e
n
 
c
r
e
a
t
e
d
 
a
n
d
 
e
m
a
i
l
e
d
 
t
o
 
y
o
u
.
 
W
h
e
n
 
t
h
e
 
i
n
v
o
i
c
e
 
h
a
s
 
b
e
e
n
 
p
a
i
d
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
u
s
e
 
t
h
e
 
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
(
s
)
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
 
=
 
'
p
u
r
c
h
a
s
e
_
s
u
c
c
e
s
s
.
h
t
m
l
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
'
S
o
r
r
y
,
 
t
h
e
r
e
 
w
a
s
 
a
 
p
r
o
b
l
e
m
 
c
r
e
a
t
i
n
g
 
t
h
e
 
i
n
v
o
i
c
e
,
 
p
l
e
a
s
e
 
d
o
u
b
l
e
 
c
h
e
c
k
 
y
o
u
r
 
L
i
c
e
n
s
e
 
S
e
r
v
e
r
 
u
s
e
r
n
a
m
e
 
a
n
d
 
p
a
s
s
w
o
r
d
 
a
r
e
 
c
o
r
r
e
c
t
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
 
=
 
'
p
u
r
c
h
a
s
e
_
f
a
i
l
u
r
e
.
h
t
m
l
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
$
t
e
m
p
l
a
t
e
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
}


 
 
 
 
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

