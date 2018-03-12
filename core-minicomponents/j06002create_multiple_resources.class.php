
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
6
0
0
2
c
r
e
a
t
e
_
m
u
l
t
i
p
l
e
_
r
e
s
o
u
r
c
e
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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


 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
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
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
1
'
 
|
|
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
'
1
'
 
|
|
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
E
S
O
U
R
C
E
S
_
O
F
_
T
Y
P
E
'
]
 
=
 
'
'
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
t
h
i
s
_
p
r
o
p
e
r
t
y
_
r
o
o
m
_
c
l
a
s
s
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
O
p
t
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
t
h
i
s
_
p
r
o
p
e
r
t
y
_
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
k
e
y
 
=
>
 
$
r
o
o
m
C
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
l
l
(
$
r
o
o
m
C
l
a
s
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
O
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
e
y
,
 
$
r
o
o
m
C
l
a
s
s
[
 
'
a
b
b
v
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
E
S
O
U
R
C
E
S
_
O
F
_
T
Y
P
E
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
c
l
a
s
s
O
p
t
i
o
n
s
,
 
'
r
e
s
o
u
r
c
e
s
T
y
p
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
T
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
d
o
e
s
n
`
t
 
h
a
v
e
 
a
n
y
 
r
o
o
m
 
t
y
p
e
s
 
a
s
s
i
g
n
e
d
 
y
e
t
.
 
P
l
e
a
s
e
 
a
s
s
i
g
n
 
s
o
m
e
 
r
o
o
m
 
t
y
p
e
s
 
t
o
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
.
'
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
o
u
t
p
u
t
[
 
'
N
U
M
B
E
R
_
O
F
_
R
E
S
O
U
R
C
E
S
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
1
,
 
1
0
0
,
 
1
,
 
'
n
u
m
b
e
r
O
f
R
e
s
o
u
r
c
e
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
 
f
o
r
m
-
c
o
n
t
r
o
l
"
'
,
 
'
1
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
R
E
S
O
U
R
C
E
S
_
M
A
X
G
U
E
S
T
S
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
1
,
 
1
0
,
 
1
,
 
'
m
a
x
G
u
e
s
t
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
 
f
o
r
m
-
c
o
n
t
r
o
l
"
'
,
 
'
1
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
o
p
t
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
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
C
O
M
_
M
R
_
N
O
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
C
O
M
_
M
R
_
N
O
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
C
O
M
_
M
R
_
Y
E
S
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
C
O
M
_
M
R
_
Y
E
S
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
L
E
T
E
_
E
X
I
S
T
I
N
G
_
R
E
S
O
U
R
C
E
S
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
d
e
l
e
t
e
E
x
i
s
t
i
n
g
R
e
s
o
u
r
c
e
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
'
0
'
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
N
U
M
B
E
R
_
O
F
_
R
E
S
O
U
R
C
E
S
'
 
]
 
=
 
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
H
O
W
M
A
N
Y
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
H
O
W
M
A
N
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
E
S
O
U
R
C
E
S
_
O
F
_
T
Y
P
E
'
 
]
 
=
 
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
Y
P
E
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
Y
P
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
E
S
O
U
R
C
E
S
_
M
A
X
G
U
E
S
T
S
'
 
]
 
=
 
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
M
A
X
G
U
E
S
T
S
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
M
A
X
G
U
E
S
T
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
D
E
L
E
T
E
_
E
X
I
S
T
I
N
G
_
R
E
S
O
U
R
C
E
S
'
 
]
 
=
 
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
D
E
L
E
T
E
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
D
E
L
E
T
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
A
G
E
T
I
T
L
E
'
 
]
 
=
 
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
I
T
L
E
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
c
a
n
c
e
l
T
e
x
t
 
=
 
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
C
O
M
_
A
_
C
A
N
C
E
L
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
C
O
M
_
A
_
C
A
N
C
E
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
'
'
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
G
E
N
E
R
A
T
E
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
G
E
N
E
R
A
T
E
'
,
 
f
a
l
s
e
)
,
 
t
r
u
e
,
 
'
s
a
v
e
_
m
u
l
t
i
p
l
e
_
r
e
s
o
u
r
c
e
s
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
'
,
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
l
i
s
t
_
r
e
s
o
u
r
c
e
s
'
)
,
 
$
c
a
n
c
e
l
T
e
x
t
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
;


 
 
 
 
 
 
 
 
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
B
A
C
K
E
N
D
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
'
c
r
e
a
t
e
_
m
u
l
t
i
p
l
e
_
r
e
s
o
u
r
c
e
s
.
h
t
m
l
'
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

