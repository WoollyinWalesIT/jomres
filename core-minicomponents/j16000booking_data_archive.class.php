
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
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e

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
r
o
w
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
D
A
T
A
_
A
R
C
H
I
V
E
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
D
A
T
A
_
A
R
C
H
I
V
E
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
I
N
F
O
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
D
A
T
A
_
A
R
C
H
I
V
E
_
T
I
T
L
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
D
A
T
A
_
A
R
C
H
I
V
E
_
T
I
T
L
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
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
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
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
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
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
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
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
D
A
T
E
A
R
C
H
I
V
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
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
D
A
T
E
A
R
C
H
I
V
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
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
D
A
T
E
A
R
C
H
I
V
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
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
i
d
,
d
a
t
a
,
d
a
t
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
 
L
I
M
I
T
 
5
0
0
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
r
e
s
u
l
t
 
a
s
 
$
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
d
a
t
a
 
c
o
m
e
s
 
i
n
 
t
w
o
 
a
r
r
a
y
s
,
 
t
m
p
b
o
o
k
i
n
g
 
a
n
d
 
t
m
p
g
u
e
s
t
.
 
W
e
'
l
l
 
c
y
c
l
e
 
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
s
e
 
t
w
o
 
s
u
b
 
a
r
r
a
y
s
 
t
o
 
c
o
n
s
t
r
u
c
t
 
t
h
e
 
p
o
p
u
p
'
s
 
c
o
n
t
e
n
t
s
.

 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
p
u
p
_
c
o
n
t
e
n
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
_
a
r
r
a
y
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
e
s
-
>
d
a
t
a
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
d
a
t
a
_
a
r
r
a
y
s
[
 
'
t
m
p
b
o
o
k
i
n
g
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
u
i
d
'
 
]
 
>
 
0
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
u
i
d
 
=
 
(
i
n
t
)
 
$
d
a
t
a
_
a
r
r
a
y
s
[
 
'
t
m
p
b
o
o
k
i
n
g
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
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
 
]
 
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
N
a
m
e
(
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
u
i
d
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
d
a
t
a
_
a
r
r
a
y
s
[
 
'
t
m
p
b
o
o
k
i
n
g
'
 
]
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
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
v
a
l
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
p
u
p
_
c
o
n
t
e
n
t
 
.
=
 
'
<
b
>
'
.
$
k
e
y
.
'
<
/
b
>
 
:
 
'
.
s
e
r
i
a
l
i
z
e
(
$
v
a
l
)
.
'
 
:
:
:
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
p
u
p
_
c
o
n
t
e
n
t
 
.
=
 
'
<
b
>
'
.
$
k
e
y
.
'
<
/
b
>
 
:
 
'
.
s
t
r
_
r
e
p
l
a
c
e
(
'
"
'
,
 
'
'
,
 
$
v
a
l
)
.
'
 
:
:
:
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
d
a
t
a
_
a
r
r
a
y
s
[
 
'
t
m
p
g
u
e
s
t
'
 
]
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
p
u
p
_
c
o
n
t
e
n
t
 
.
=
 
'
<
b
>
'
.
$
k
e
y
.
'
<
/
b
>
 
:
 
'
.
s
t
r
_
r
e
p
l
a
c
e
(
'
"
'
,
 
'
'
,
 
$
v
a
l
)
.
'
 
:
:
:
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
j
o
m
r
e
s
_
m
a
k
e
T
o
o
l
t
i
p
(
'
x
x
x
'
.
$
r
e
s
-
>
i
d
,
 
$
r
[
 
'
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
 
]
,
 
$
p
o
p
u
p
_
c
o
n
t
e
n
t
,
 
$
r
e
s
-
>
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
D
A
T
E
_
T
O
O
T
I
P
'
 
]
 
=
 
$
d
a
t
a
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
a
n
c
e
l
'
,
 
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
R
P
O
R
T
A
L
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
R
P
O
R
T
A
L
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
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
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
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
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

