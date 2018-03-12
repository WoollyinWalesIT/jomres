
<
?
p
h
p

/
*
*

 
*
 
T
h
i
s
 
s
c
r
i
p
t
 
i
s
 
m
a
i
n
l
y
 
u
s
e
d
 
f
o
r
 
b
o
o
t
s
t
r
a
p
p
i
n
g
 
J
o
m
r
e
s
.
 
I
t
'
s
 
o
l
d
 
c
o
d
e
,
 
b
u
t
 
i
t
 
c
h
e
c
k
s
 
o
u
t
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


/
*
*

*

*
 
T
R
A
N
S
A
C
T
I
O
N
_
I
D
 
i
s
 
u
s
e
d
 
b
y
 
t
h
e
 
l
o
g
g
e
r
 
c
l
a
s
s
 
t
o
 
a
l
l
o
w
 
u
s
 
t
o
 
t
r
a
c
k
 
s
i
n
g
l
e
 
c
a
l
l
s
 
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
y
s
t
e
m

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
'
)
)
 
{

 
 
 
 
d
e
f
i
n
e
(
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
'
,
 
t
i
m
e
(
)
)
;

}



/
*
*

*

*
 
j
o
m
r
e
s
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
 
n
a
m
e

*

*
 
W
o
r
d
p
r
e
s
s
 
d
e
t
e
r
m
i
n
e
d
 
f
o
r
 
s
o
m
e
 
r
e
a
s
o
n
 
t
h
a
t
 
t
h
e
 
J
o
m
r
e
s
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
 
s
h
o
u
l
d
 
b
e
 
c
o
n
f
i
g
u
r
a
b
l
e
 
a
s
 
a
 
c
o
n
d
i
t
i
o
n
 
o
f
 
l
i
s
t
i
n
g
 
J
o
m
r
e
s
 
o
n
 
t
h
e
 
W
o
r
d
p
r
e
s
s
 
p
l
u
g
i
n
 
d
i
r
e
c
t
o
r
y
.
 
C
M
S
 
r
o
o
t
 
d
i
r
e
c
t
o
r
i
e
s
 
a
r
e
 
s
o
m
e
t
i
m
e
s
 
n
o
t
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
 
a
n
d
 
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
 
c
a
n
n
o
t
 
b
e
 
c
r
e
a
t
e
d
,
 
i
n
 
w
h
i
c
h
 
c
a
s
e
 
w
e
 
w
i
l
l
 
a
s
s
u
m
e
 
t
h
a
t
 
t
h
e
 
J
o
m
r
e
s
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
 
i
s
 
c
a
l
l
e
d
 
"
j
o
m
r
e
s
"

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
'
)
)
 
{

 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
'
,
 
'
j
o
m
r
e
s
'
)
;

 
 
 
 
}

}



/
*
*

*

*
 
f
i
n
d
 
j
o
m
r
e
s
 
r
o
o
t
 
p
a
t
h

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
'
)
)
 
{

 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
R
D
S
'
)
)
 
{

 
 
 
 
 
 
 
 
$
a
p
a
c
h
e
S
i
g
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
d
e
t
e
c
t
_
o
s
 
=
 
s
t
r
t
o
u
p
p
e
r
(
$
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
S
O
F
T
W
A
R
E
'
 
]
)
;
 
/
/
 
c
o
n
v
e
r
t
e
d
 
t
o
 
u
p
p
e
r
c
a
s
e

 
 
 
 
 
 
 
 
$
i
s
W
i
n
3
2
 
=
 
s
t
r
p
o
s
(
$
d
e
t
e
c
t
_
o
s
,
 
'
W
I
N
3
2
'
)
;

 
 
 
 
 
 
 
 
$
I
I
S
 
=
 
s
t
r
p
o
s
(
$
d
e
t
e
c
t
_
o
s
,
 
'
I
I
S
'
)
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
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
S
I
G
N
A
T
U
R
E
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
g
n
a
t
u
r
e
 
=
 
s
t
r
t
o
u
p
p
e
r
(
$
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
S
I
G
N
A
T
U
R
E
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
a
c
h
e
S
i
g
 
=
 
s
t
r
p
o
s
(
$
s
i
g
n
a
t
u
r
e
,
 
'
A
P
A
C
H
E
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
i
r
 
=
 
d
i
r
n
a
m
e
(
r
e
a
l
p
a
t
h
(
_
_
F
I
L
E
_
_
)
)
;


 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
d
i
r
,
 
'
:
\
\
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
R
D
S
'
,
 
'
\
\
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
s
W
i
n
3
2
 
=
=
=
 
f
a
l
s
e
 
|
|
 
$
a
p
a
c
h
e
S
i
g
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
R
D
S
'
,
 
'
/
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
R
D
S
'
,
 
'
\
\
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
S
E
R
V
E
R
[
 
'
S
C
R
I
P
T
_
F
I
L
E
N
A
M
E
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
d
i
r
_
p
a
t
h
 
=
 
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
$
_
S
E
R
V
E
R
[
 
'
S
C
R
I
P
T
_
F
I
L
E
N
A
M
E
'
 
]
,
 
'
'
,
 
d
i
r
n
a
m
e
(
r
e
a
l
p
a
t
h
(
_
_
F
I
L
E
_
_
)
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
d
i
r
_
p
a
t
h
 
=
 
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
$
_
S
E
R
V
E
R
[
 
'
S
C
R
I
P
T
_
N
A
M
E
'
 
]
,
 
'
'
,
 
d
i
r
n
a
m
e
(
r
e
a
l
p
a
t
h
(
_
_
F
I
L
E
_
_
)
)
)
;

 
 
 
 
}


 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
'
,
 
$
d
i
r
_
p
a
t
h
.
J
R
D
S
)
;

}


/
*
*

*

*
 
c
h
e
c
k
 
i
f
 
t
h
i
s
 
i
s
 
a
n
 
a
j
a
x
 
c
a
l
l
 
o
r
 
n
o
t

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
J
A
X
C
A
L
L
'
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
j
r
a
j
a
x
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
j
r
a
j
a
x
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
A
J
A
X
C
A
L
L
'
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
A
J
A
X
C
A
L
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
A
J
A
X
C
A
L
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

 
 
 
 
}

}



/
*
*

*

*
 
d
e
f
i
n
e
 
j
o
m
r
e
s
 
p
a
t
h
s

*

*
/

d
e
f
i
n
e
(
'
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
'
,
 
s
u
b
s
t
r
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
,
 
0
,
 
s
t
r
l
e
n
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
)
 
-
 
s
t
r
l
e
n
(
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
)
)
)
;


/
/
a
p
p

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
A
P
P
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
c
o
r
e
-
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
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
c
o
r
e
-
p
l
u
g
i
n
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
j
o
m
r
e
s
'
.
J
R
D
S
.
'
c
l
a
s
s
e
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
j
o
m
r
e
s
'
.
J
R
D
S
.
'
f
u
n
c
t
i
o
n
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
M
S
S
P
E
C
I
F
I
C
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
j
o
m
r
e
s
'
.
J
R
D
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
A
P
I
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
a
p
i
'
.
J
R
D
S
)
;


/
/
a
s
s
e
t
s

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
A
S
S
E
T
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
a
s
s
e
t
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
S
S
_
R
E
L
P
A
T
H
'
,
 
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
s
s
e
t
s
/
c
s
s
/
'
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
S
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
_
A
S
S
E
T
S
_
A
B
S
P
A
T
H
.
'
c
s
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
'
,
 
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
s
s
e
t
s
/
j
s
/
'
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
J
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
_
A
S
S
E
T
S
_
A
B
S
P
A
T
H
.
'
j
s
'
.
J
R
D
S
)
;


/
/
s
t
o
r
a
g
e

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
S
E
S
S
I
O
N
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
s
e
s
s
i
o
n
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
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
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
t
e
m
p
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
A
C
H
E
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
c
a
c
h
e
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
U
P
D
A
T
E
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
u
p
d
a
t
e
s
'
.
J
R
D
S
)
;


/
/
v
e
n
d
o
r
s

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
V
E
N
D
O
R
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
v
e
n
d
o
r
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
n
o
d
e
_
m
o
d
u
l
e
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
'
,
 
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
n
o
d
e
_
m
o
d
u
l
e
s
/
'
)
;


/
/
i
n
c
l
u
d
e
s

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
V
E
N
D
O
R
_
A
B
S
P
A
T
H
.
'
a
u
t
o
l
o
a
d
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
d
e
t
e
c
t
_
c
m
s
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
d
a
t
a
b
a
s
e
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
o
u
t
p
u
t
_
f
i
l
t
e
r
s
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
f
u
n
c
t
i
o
n
s
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
m
u
l
t
i
b
y
e
_
f
u
n
c
t
i
o
n
s
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
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
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
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
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
.
'
j
o
m
r
e
s
_
e
m
p
t
y
_
c
l
a
s
s
.
c
l
a
s
s
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
.
'
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
.
c
l
a
s
s
.
p
h
p
'
;


/
*
*

*

*
 
i
n
c
l
u
d
e
 
t
h
e
 
c
l
a
s
s
e
s
 
r
e
g
i
s
t
r
y
 
f
i
l
e
 
a
n
d
 
m
a
k
e
 
$
c
l
a
s
s
e
s
 
a
 
g
l
o
b
a
l
 
v
a
r
i
a
b
l
e
 
t
o
 
b
e
 
e
a
s
i
l
y
 
a
c
c
e
s
s
i
b
l
e
,
 
s
o
 
w
e
`
l
l
 
a
v
o
i
d
 
c
a
l
l
i
n
g
 
i
n
c
l
u
d
e
(
)
 
m
o
r
e
 
t
i
m
e
s

*

*
/

g
l
o
b
a
l
 
$
c
l
a
s
s
e
s
;


i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
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
_
A
B
S
P
A
T
H
.
'
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
)
)
 
{

	
i
n
c
l
u
d
e
_
o
n
c
e
 
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
_
A
B
S
P
A
T
H
.
'
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
;

}
 
e
l
s
e
 
{

	
$
c
l
a
s
s
e
s
 
=
 
s
e
a
r
c
h
_
c
o
r
e
_
a
n
d
_
r
e
m
o
t
e
_
d
i
r
s
_
f
o
r
_
c
l
a
s
s
f
i
l
e
s
(
)
;

}


/
/
i
n
c
l
u
d
e
s

r
e
q
u
i
r
e
_
o
n
c
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
i
n
i
t
_
c
o
n
f
i
g
_
v
a
r
s
.
p
h
p
'
;

r
e
q
u
i
r
e
_
o
n
c
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
f
u
n
c
t
i
o
n
s
.
p
h
p
'
;


/
/
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

i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
s
(
'
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
'
)
)
 
{

 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
.
'
p
h
p
t
o
o
l
s
'
.
J
R
D
S
.
'
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
.
p
h
p
'
;

}


i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
s
(
'
p
a
t
E
r
r
o
r
M
a
n
a
g
e
r
'
)
)
 
{

 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
.
'
p
h
p
t
o
o
l
s
'
.
J
R
D
S
.
'
p
a
t
E
r
r
o
r
M
a
n
a
g
e
r
.
p
h
p
'
;

}


/
*
*

*

*
 
T
h
e
 
A
P
I
 
i
n
c
l
u
d
e
s
 
t
h
e
 
l
o
g
g
e
r
 
c
l
a
s
s
.
 
A
s
 
t
h
e
 
A
P
I
 
d
o
e
s
n
'
t
 
a
l
w
a
y
s
 
i
n
c
l
u
d
e
 
t
h
e
 
f
r
a
m
e
w
o
r
k
 
(
 
f
o
r
 
p
e
r
f
o
r
m
a
n
c
e
 
)
 
t
o
 
u
s
e
 
t
h
e
 
l
o
g
g
e
r
 
w
i
t
h
i
n
 
J
o
m
r
e
s
 
i
t
s
e
l
f
,
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
m
a
k
e
 
t
h
e
 
d
i
s
t
i
n
c
t
i
o
n
 
h
e
r
e

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
A
P
I
_
C
M
S
_
R
O
O
T
'
)
)
 
{

 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
A
P
I
_
A
B
S
P
A
T
H
.
'
c
l
a
s
s
e
s
'
.
J
R
D
S
.
'
l
o
g
g
i
n
g
.
c
l
a
s
s
.
p
h
p
'
;

}


/
/
s
i
t
e
 
c
o
n
f
i
g

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


/
/
d
e
f
i
n
e
 
j
o
m
r
e
s
 
l
o
g
s
 
p
a
t
h

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
j
r
C
o
n
f
i
g
[
'
l
o
g
_
p
a
t
h
'
]
)
 
|
|
 
$
j
r
C
o
n
f
i
g
[
'
l
o
g
_
p
a
t
h
'
]
 
=
=
 
'
'
)
 
{

 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
l
o
g
_
p
a
t
h
'
]
 
=
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
l
o
g
s
'
.
J
R
D
S
;

}


d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
'
,
 
f
i
x
_
p
a
t
h
(
$
j
r
C
o
n
f
i
g
[
'
l
o
g
_
p
a
t
h
'
]
)
)
;


/
*
*

*

*
 
d
e
f
i
n
e
 
c
o
r
e
 
i
m
a
g
e
s
 
p
a
t
h
s

*

*
/

$
u
r
i
 
=
 
p
a
r
s
e
_
u
r
l
(
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
l
i
v
e
_
s
i
t
e
'
)
)
;

$
p
a
t
h
 
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
u
r
i
[
'
p
a
t
h
'
]
)
)
 
{

	
$
p
a
t
h
 
=
 
$
u
r
i
[
'
p
a
t
h
'
]
;

}


d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
M
A
G
E
S
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
_
A
S
S
E
T
S
_
A
B
S
P
A
T
H
.
'
i
m
a
g
e
s
'
.
J
R
D
S
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
'
,
 
$
p
a
t
h
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
'
)
;


/
*
*

*

*
 
d
e
f
i
n
e
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e
s
 
p
a
t
h
s

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
'
)
)
 
{

	
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
'
,
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
u
p
l
o
a
d
e
d
i
m
a
g
e
s
'
.
J
R
D
S
)
;

	

	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
a
c
t
i
v
e
'
]
 
!
=
 
'
1
'
 
|
|
 
$
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
]
 
=
=
 
'
'
)
 
{

	
	
i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
A
P
I
_
C
M
S
_
R
O
O
T
'
)
)
 
{

	
	
	
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
'
,
 
$
p
a
t
h
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
'
,
 
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
l
i
v
e
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
)
;

	
	
}

	
}
 
e
l
s
e
 
{

	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
c
l
o
u
d
f
r
o
n
t
_
d
o
m
a
i
n
'
]
 
!
=
 
'
'
)
 
{

	
	
	
$
a
m
a
z
o
n
_
u
r
l
 
=
 
'
h
t
t
p
s
:
/
/
'
.
$
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
c
l
o
u
d
f
r
o
n
t
_
d
o
m
a
i
n
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
a
m
a
z
o
n
_
u
r
l
 
=
 
'
h
t
t
p
s
:
/
/
'
.
$
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
]
.
'
.
s
3
.
a
m
a
z
o
n
a
w
s
.
c
o
m
'
;

	
	
}

	
	

	
	
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
'
,
 
$
a
m
a
z
o
n
_
u
r
l
.
'
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
)
;

	
}

}



/
*
*

*

*
 
f
u
l
l
s
c
r
e
e
n
 
v
i
e
w
 
s
e
t
u
p

*

*
/

s
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
t
m
p
l
c
o
m
p
o
n
e
n
t
'
,
 
'
j
o
m
r
e
s
'
)
;

s
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
t
m
p
l
c
o
m
p
o
n
e
n
t
_
s
o
u
r
c
e
'
,
 
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
.
'
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
'
.
J
R
D
S
.
'
j
o
m
r
e
s
.
p
h
p
'
)
;



/
*
*

*

*
 
c
o
p
y
 
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
j
o
m
r
e
s
.
p
h
p
 
t
o
 
t
h
e
 
j
o
o
m
l
a
 
t
e
m
p
l
a
t
e
 
d
i
r
 
t
o
 
h
e
l
p
 
w
i
t
h
 
f
u
l
l
s
c
r
e
e
n
 
m
o
d
e

*

*
/

i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
p
a
t
c
h
J
o
o
m
l
a
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
c
m
s
 
s
p
e
c
i
f
i
c
 
u
r
l
s

r
e
q
u
i
r
e
_
o
n
c
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
u
r
l
s
.
p
h
p
'
;


/
/
j
o
m
r
e
s
 
p
a
r
s
e
 
r
e
q
u
e
s
t

j
o
m
r
e
s
_
p
a
r
s
e
R
e
q
u
e
s
t
(
)
;


/
/
e
r
r
o
r
 
r
e
p
o
r
t
i
n
g

i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
 
]
 
=
=
 
'
p
r
o
d
u
c
t
i
o
n
'
)
 
{

 
 
 
 
s
e
t
_
e
r
r
o
r
_
h
a
n
d
l
e
r
(
'
e
r
r
o
r
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

}
 
e
l
s
e
 
{

 
 
 
 
e
r
r
o
r
_
r
e
p
o
r
t
i
n
g
(
-
1
)
;

 
 
 
 
i
n
i
_
s
e
t
(
'
d
i
s
p
l
a
y
_
e
r
r
o
r
s
'
,
 
'
O
n
'
)
;

}


/
/
T
O
D
O
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
p
l
a
c
e
,
 
m
a
y
b
e
 
j
o
m
r
e
s
.
p
h
p
 
a
n
d
 
f
r
a
m
e
w
o
r
k
.
p
h
p

$
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
H
T
M
L
'
)
;


/
/
 
S
t
o
p
s
 
h
e
r
e

