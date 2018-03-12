
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
l
i
s
t
_
i
n
v
o
i
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
a
r
t
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
P
O
S
T
,
 
'
s
t
a
r
t
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

 
 
 
 
 
 
 
 
$
e
n
d
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
P
O
S
T
,
 
'
e
n
d
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
s
t
a
r
t
D
a
t
e
 
=
=
 
'
%
'
 
|
|
 
$
s
t
a
r
t
D
a
t
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
t
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
'
-
5
 
y
e
a
r
s
'
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
t
D
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
s
t
a
r
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
e
n
d
D
a
t
e
 
=
=
 
'
%
'
 
|
|
 
$
e
n
d
D
a
t
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
'
+
5
 
y
e
a
r
s
'
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
e
n
d
D
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
e
n
d
D
a
t
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
t
a
t
u
s
 
v
a
l
u
e
s
 
a
r
e
 
a
s
 
f
o
l
l
o
w
s

 
 
 
 
 
 
 
 
/
/
0
 
u
n
p
a
i
d

 
 
 
 
 
 
 
 
/
/
1
 
p
a
i
d

 
 
 
 
 
 
 
 
/
/
2
 
c
a
n
c
e
l
l
e
d

 
 
 
 
 
 
 
 
/
/
3
 
p
e
n
d
i
n
g

 
 
 
 
 
 
 
 
/
/
4
 
a
n
y

 
 
 
 
 
 
 
 
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
i
n
v
o
i
c
e
_
s
t
a
t
u
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
s
t
a
t
u
s
 
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
i
n
v
o
i
c
e
_
s
t
a
t
u
s
'
,
 
'
4
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
i
n
v
o
i
c
e
_
s
t
a
t
u
s
 
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
P
O
S
T
,
 
'
i
n
v
o
i
c
e
_
s
t
a
t
u
s
'
,
 
'
4
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
t
y
p
e
 
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
P
O
S
T
,
 
'
i
n
v
o
i
c
e
_
t
y
p
e
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
c
m
s
_
u
s
e
r
_
i
d
 
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
c
m
s
_
u
s
e
r
_
i
d
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
R
P
O
R
T
A
L
_
I
N
V
O
I
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
R
P
O
R
T
A
L
_
I
N
V
O
I
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
o
u
t
p
u
t
[
 
'
H
F
I
R
S
T
N
A
M
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
U
R
N
A
M
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
U
R
N
A
M
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
S
U
R
N
A
M
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
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
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
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
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
S
T
A
T
U
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
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
R
A
I
S
E
D
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
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
U
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
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
P
A
I
D
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
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
I
N
I
T
T
O
T
A
L
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
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
o
u
t
p
u
t
[
 
'
H
G
R
A
N
D
_
T
O
T
A
L
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
C
O
M
_
I
N
V
O
I
C
E
_
L
E
T
T
E
R
_
G
R
A
N
D
T
O
T
A
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
I
N
V
O
I
C
E
_
L
E
T
T
E
R
_
G
R
A
N
D
T
O
T
A
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
o
u
t
p
u
t
[
 
'
H
F
R
E
Q
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
F
R
E
Q
U
E
N
C
Y
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
F
R
E
Q
U
E
N
C
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
D
O
M
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
D
O
M
O
N
T
H
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
D
O
M
O
N
T
H
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
L
I
N
E
I
T
E
M
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
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
E
D
I
T
L
I
N
K
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
E
D
I
T
D
E
T
A
I
L
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
D
I
S
P
G
U
E
S
T
_
E
D
I
T
D
E
T
A
I
L
S
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
L
E
G
E
N
D
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
H
L
E
G
E
N
D
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
H
L
E
G
E
N
D
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
U
N
P
A
I
D
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
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
P
A
I
D
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
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
C
A
N
C
E
L
L
E
D
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
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
P
E
N
D
I
N
G
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
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
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
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


 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
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
T
A
S
K
_
F
I
L
T
E
R
_
A
N
Y
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
i
n
v
o
i
c
e
s
"
>
'
.
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
'
,
 
f
a
l
s
e
)
.
'
<
/
a
>
'
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
T
A
S
K
_
F
I
L
T
E
R
_
U
N
P
A
I
D
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
i
n
v
o
i
c
e
s
&
i
n
v
o
i
c
e
_
s
t
a
t
u
s
=
0
"
>
'
.
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
U
N
P
A
I
D
'
 
]
.
'
<
/
a
>
'
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
T
A
S
K
_
F
I
L
T
E
R
_
P
A
I
D
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
i
n
v
o
i
c
e
s
&
i
n
v
o
i
c
e
_
s
t
a
t
u
s
=
1
"
>
'
.
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
P
A
I
D
'
 
]
.
'
<
/
a
>
'
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
T
A
S
K
_
F
I
L
T
E
R
_
C
A
N
C
E
L
L
E
D
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
i
n
v
o
i
c
e
s
&
i
n
v
o
i
c
e
_
s
t
a
t
u
s
=
2
"
>
'
.
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
C
A
N
C
E
L
L
E
D
'
 
]
.
'
<
/
a
>
'
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
T
A
S
K
_
F
I
L
T
E
R
_
P
E
N
D
I
N
G
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
i
n
v
o
i
c
e
s
&
i
n
v
o
i
c
e
_
s
t
a
t
u
s
=
3
"
>
'
.
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
P
E
N
D
I
N
G
'
 
]
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
f
i
l
t
e
r
s

 
 
 
 
 
 
 
 
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
F
I
L
T
E
R
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
H
F
I
L
T
E
R
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
H
F
I
L
T
E
R
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
I
N
V
O
I
C
E
_
S
T
A
T
U
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
H
S
T
A
T
U
S
_
I
N
V
O
I
C
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
H
S
T
A
T
U
S
_
I
N
V
O
I
C
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
I
N
V
O
I
C
E
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
H
S
T
A
T
U
S
_
I
N
V
O
I
C
E
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
H
S
T
A
T
U
S
_
I
N
V
O
I
C
E
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
S
T
A
R
T
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
H
F
R
O
M
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
H
F
R
O
M
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
E
N
D
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
H
T
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
H
T
O
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
S
T
A
R
T
'
 
]
 
=
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
s
t
a
r
t
D
a
t
e
'
,
 
$
s
t
a
r
t
D
a
t
e
,
 
f
a
l
s
e
,
 
t
r
u
e
,
 
t
r
u
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
E
N
D
'
 
]
 
=
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
e
n
d
D
a
t
e
'
,
 
$
e
n
d
D
a
t
e
,
 
f
a
l
s
e
,
 
t
r
u
e
,
 
t
r
u
e
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
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
S
T
A
T
U
S
_
C
O
M
M
I
S
S
I
O
N
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
S
T
A
T
U
S
_
C
O
M
M
I
S
S
I
O
N
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
2
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
S
T
A
T
U
S
_
S
U
B
S
C
R
I
P
T
I
O
N
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
S
T
A
T
U
S
_
S
U
B
S
C
R
I
P
T
I
O
N
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
3
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
S
T
A
T
U
S
_
U
N
I
S
S
U
E
D
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
S
T
A
T
U
S
_
U
N
I
S
S
U
E
D
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
I
N
V
O
I
C
E
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
o
p
t
i
o
n
s
,
 
'
i
n
v
o
i
c
e
_
t
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
 
$
i
n
v
o
i
c
e
_
t
y
p
e
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
4
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
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
0
'
,
 
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
U
N
P
A
I
D
'
 
]
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
P
A
I
D
'
 
]
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
2
'
,
 
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
C
A
N
C
E
L
L
E
D
'
 
]
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
3
'
,
 
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
P
E
N
D
I
N
G
'
 
]
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
I
N
V
O
I
C
E
_
S
T
A
T
U
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
i
n
v
o
i
c
e
_
s
t
a
t
u
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
 
$
i
n
v
o
i
c
e
_
s
t
a
t
u
s
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
C
M
S
_
U
S
E
R
_
I
D
'
]
 
=
 
$
c
m
s
_
u
s
e
r
_
i
d
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
A
J
A
X
_
U
R
L
'
]
 
=
 
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
_
A
D
M
I
N
_
A
J
A
X
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
i
n
v
o
i
c
e
s
_
a
j
a
x
&
s
t
a
r
t
D
a
t
e
=
'
.
$
s
t
a
r
t
D
a
t
e
.
'
&
e
n
d
D
a
t
e
=
'
.
$
e
n
d
D
a
t
e
.
'
&
i
n
v
o
i
c
e
_
t
y
p
e
=
'
.
$
i
n
v
o
i
c
e
_
t
y
p
e
.
'
&
i
n
v
o
i
c
e
_
s
t
a
t
u
s
=
'
.
$
i
n
v
o
i
c
e
_
s
t
a
t
u
s
.
'
&
c
m
s
_
u
s
e
r
_
i
d
=
'
.
$
c
m
s
_
u
s
e
r
_
i
d
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
l
i
s
t
_
i
n
v
o
i
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

