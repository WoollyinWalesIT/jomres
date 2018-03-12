
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
a
j
a
x
_
s
e
n
d
_
t
e
s
t
_
e
m
a
i
l

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


 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
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
[
'
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
'
]
)
 
!
=
 
'
'
)
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
_
s
e
t
t
i
n
g
s
'
,
 
'
1
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
,
 
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
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
'
,
 
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
'
,
 
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
'
,
 
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
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
,
 
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
l
t
e
r
n
a
t
e
_
s
m
t
p
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
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
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
,
 
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
l
t
e
r
n
a
t
e
_
s
m
t
p
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
,
 
'
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
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
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
 
=
=
 
'
t
r
u
e
'
)
 
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
-
>
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
'
,
 
'
1
'
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
s
e
t
_
s
e
t
t
i
n
g
(
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
o
b
_
s
t
a
r
t
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
s
 
=
 
j
o
m
r
e
s
M
a
i
l
e
r
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
_
s
e
t
t
i
n
g
(
'
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
T
E
S
T
 
E
M
A
I
L
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
'
,
 
'
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
g
e
t
t
e
x
t
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
T
E
S
T
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
g
e
t
t
e
x
t
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
T
E
S
T
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
 
=
 
1
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
c
o
n
t
e
n
t
s
 
=
 
o
b
_
g
e
t
_
c
o
n
t
e
n
t
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
o
b
_
e
n
d
_
c
l
e
a
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
u
c
c
e
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
_
a
r
r
a
y
[
'
s
t
a
t
u
s
'
]
 
=
 
t
r
u
e
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
s
p
o
n
s
e
_
a
r
r
a
y
[
'
s
t
a
t
u
s
'
]
 
=
 
f
a
l
s
e
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
_
a
r
r
a
y
[
'
f
a
i
l
u
r
e
_
m
e
s
s
a
g
e
'
]
 
=
 
$
c
o
n
t
e
n
t
s
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
_
a
r
r
a
y
[
'
s
t
a
t
u
s
'
]
 
=
 
f
a
l
s
e
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
_
a
r
r
a
y
[
'
f
a
i
l
u
r
e
_
m
e
s
s
a
g
e
'
]
 
=
 
"
 
T
h
e
 
E
m
a
i
l
 
a
d
d
r
e
s
s
 
t
o
 
s
e
n
d
 
t
h
e
 
e
m
a
i
l
 
t
o
 
w
a
s
n
'
t
 
s
e
t
.
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
h
e
a
d
e
r
(
'
C
o
n
t
e
n
t
-
t
y
p
e
:
 
a
p
p
l
i
c
a
t
i
o
n
/
j
s
o
n
'
)
;

 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
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
_
a
r
r
a
y
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

