
<
?
p
h
p

/
*
*

*
 
J
o
m
r
e
s
 
C
M
S
 
A
g
n
o
s
t
i
c
 
P
l
u
g
i
n
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
 
W
o
o
l
l
y
i
n
w
a
l
e
s
 
I
T
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
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
5
0
1
t
o
u
r
i
s
t
_
t
a
x

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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
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
 
1
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
l
i
s
t
s
 
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
l
i
s
t
s
'
]
;

 
 
 
 
 
 
 
 
$
e
d
i
t
I
c
o
n
S
i
z
e
 
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
e
d
i
t
I
c
o
n
S
i
z
e
'
]
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
O
U
R
I
S
T
_
T
A
X
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
T
O
U
R
I
S
T
_
T
A
X
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
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
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
t
o
u
r
i
s
t
_
t
a
x
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
o
u
r
i
s
t
_
t
a
x
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
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
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
e
'
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
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
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
y
e
s
n
o
 
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
y
e
s
n
o
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
y
e
s
n
o
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
O
U
R
I
S
T
_
T
A
X
_
T
A
X
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
T
O
U
R
I
S
T
_
T
A
X
_
T
A
X
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
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
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
0
"
 
n
a
m
e
=
"
c
f
g
_
t
o
u
r
i
s
t
_
t
a
x
"
 
v
a
l
u
e
=
"
'
.
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
t
o
u
r
i
s
t
_
t
a
x
'
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
O
U
R
I
S
T
_
T
A
X
_
T
A
X
R
A
T
E
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
T
O
U
R
I
S
T
_
T
A
X
_
T
A
X
R
A
T
E
_
D
E
S
C
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
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
T
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
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
y
e
s
n
o
,
 
'
c
f
g
_
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
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
 
(
i
n
t
)
 
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
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
e
'
]
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
N
O
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
T
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
N
O
_
D
E
S
C
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
/
/
 
C
o
m
m
e
n
t
e
d
 
o
u
t
 
f
o
r
 
n
o
w
.

 
 
 
 
 
 
 
 
/
/
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
W
H
O
L
E
B
O
O
K
I
N
G
_
Y
E
S
N
O
)
;

 
 
 
 
 
 
 
 
/
/
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
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
y
e
s
n
o
,
 
'
c
f
g
_
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
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
 
(
i
n
t
)
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
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
'
]
)
)
;

 
 
 
 
 
 
 
 
/
/
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
W
H
O
L
E
B
O
O
K
I
N
G
_
Y
E
S
N
O
_
D
E
S
C
)
;

 
 
 
 
 
 
 
 
/
/
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;

 
 
 
 
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

