
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
0
s
h
o
w
_
m
a
r
k
d
o
w
n
_
m
o
d
a
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
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
;


 
 
 
 
 
 
 
 
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
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
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
_
n
o
w
 
=
 
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
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
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
_
n
o
w
 
=
 
t
r
u
e
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
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
A
R
K
D
O
W
N
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
A
R
K
D
O
W
N
_
T
I
T
L
E
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
D
E
S
C
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
A
R
K
D
O
W
N
_
D
E
S
C
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
A
R
K
D
O
W
N
_
D
E
S
C
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
E
M
P
H
A
S
I
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
A
R
K
D
O
W
N
_
E
M
P
H
A
S
I
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
A
R
K
D
O
W
N
_
E
M
P
H
A
S
I
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
B
O
L
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
M
A
R
K
D
O
W
N
_
B
O
L
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
M
A
R
K
D
O
W
N
_
B
O
L
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
I
T
A
L
I
C
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
A
R
K
D
O
W
N
_
I
T
A
L
I
C
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
A
R
K
D
O
W
N
_
I
T
A
L
I
C
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
S
T
R
I
K
E
T
H
R
O
U
G
H
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
A
R
K
D
O
W
N
_
S
T
R
I
K
E
T
H
R
O
U
G
H
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
A
R
K
D
O
W
N
_
S
T
R
I
K
E
T
H
R
O
U
G
H
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
H
E
A
D
E
R
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
A
R
K
D
O
W
N
_
H
E
A
D
E
R
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
A
R
K
D
O
W
N
_
H
E
A
D
E
R
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
B
I
G
H
E
A
D
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
M
A
R
K
D
O
W
N
_
B
I
G
H
E
A
D
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
M
A
R
K
D
O
W
N
_
B
I
G
H
E
A
D
E
R
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
M
E
D
I
U
M
H
E
A
D
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
M
A
R
K
D
O
W
N
_
M
E
D
I
U
M
H
E
A
D
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
M
A
R
K
D
O
W
N
_
M
E
D
I
U
M
H
E
A
D
E
R
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
S
M
A
L
L
H
E
A
D
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
M
A
R
K
D
O
W
N
_
S
M
A
L
L
H
E
A
D
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
M
A
R
K
D
O
W
N
_
S
M
A
L
L
H
E
A
D
E
R
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
I
N
Y
H
E
A
D
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
M
A
R
K
D
O
W
N
_
T
I
N
Y
H
E
A
D
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
M
A
R
K
D
O
W
N
_
T
I
N
Y
H
E
A
D
E
R
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
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
A
R
K
D
O
W
N
_
L
I
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
A
R
K
D
O
W
N
_
L
I
S
T
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
G
E
N
E
R
I
C
L
I
S
T
I
T
E
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
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
G
E
N
E
R
I
C
L
I
S
T
I
T
E
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
M
A
R
K
D
O
W
N
_
G
E
N
E
R
I
C
L
I
S
T
I
T
E
M
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
N
U
M
B
E
R
E
D
L
I
S
T
I
T
E
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
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
N
U
M
B
E
R
E
D
L
I
S
T
I
T
E
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
M
A
R
K
D
O
W
N
_
N
U
M
B
E
R
E
D
L
I
S
T
I
T
E
M
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
N
K
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
A
R
K
D
O
W
N
_
L
I
N
K
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
A
R
K
D
O
W
N
_
L
I
N
K
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
N
K
S
T
E
X
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
M
A
R
K
D
O
W
N
_
L
I
N
K
S
T
E
X
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
M
A
R
K
D
O
W
N
_
L
I
N
K
S
T
E
X
T
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
I
M
A
G
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
A
R
K
D
O
W
N
_
I
M
A
G
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
M
A
R
K
D
O
W
N
_
I
M
A
G
E
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
A
B
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
A
R
K
D
O
W
N
_
T
A
B
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
A
R
K
D
O
W
N
_
T
A
B
L
E
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
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
C
O
L
U
M
N
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
A
R
K
D
O
W
N
_
C
O
L
U
M
N
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
A
R
K
D
O
W
N
_
C
O
L
U
M
N
'
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
'
m
a
r
k
d
o
w
n
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
e
m
p
l
a
t
e
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
t
e
m
p
l
a
t
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
e
m
p
l
a
t
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

