
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

 
 
 
 
j
r
_
i
m
p
o
r
t
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
_
n
o
r
m
a
l
'
)
;


 
 
 
 
c
l
a
s
s
 
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
 
e
x
t
e
n
d
s
 
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
_
n
o
r
m
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
t
h
i
s
-
>
l
i
v
e
s
i
t
e
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
S
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
A
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
m
e
n
u
b
a
r
I
m
a
g
e
s
A
r
r
a
y
 
=
 
$
t
h
i
s
-
>
g
e
t
M
e
n
u
b
a
r
I
m
a
g
e
s
A
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
i
m
a
g
e
S
i
z
e
 
=
 
'
s
m
a
l
l
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
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
S
i
z
e
 
=
 
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
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
E
x
t
e
n
s
i
o
n
 
=
 
'
p
n
g
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}
 
e
l
s
e
 
{

	
$
t
h
e
_
t
o
o
l
b
a
r
_
c
l
a
s
s
_
f
i
l
e
n
a
m
e
 
=
 
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
'
;

	

 
 
 
 
$
b
s
_
v
e
r
s
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
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
;

 
 
 
 

	
i
f
 
(
$
b
s
_
v
e
r
s
i
o
n
 
=
=
 
'
2
'
 
|
|
 
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
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
$
t
h
e
_
t
o
o
l
b
a
r
_
c
l
a
s
s
_
f
i
l
e
n
a
m
e
 
=
 
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
'
;

 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
b
s
_
v
e
r
s
i
o
n
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
$
t
h
e
_
t
o
o
l
b
a
r
_
c
l
a
s
s
_
f
i
l
e
n
a
m
e
 
=
 
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
3
'
;

 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
b
s
_
v
e
r
s
i
o
n
 
=
=
 
'
4
'
)
 
{

 
 
 
 
 
 
 
 
$
t
h
e
_
t
o
o
l
b
a
r
_
c
l
a
s
s
_
f
i
l
e
n
a
m
e
 
=
 
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
4
'
;

 
 
 
 
}


	
j
r
_
i
m
p
o
r
t
(
$
t
h
e
_
t
o
o
l
b
a
r
_
c
l
a
s
s
_
f
i
l
e
n
a
m
e
)
;

 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
I
t
e
m
T
o
o
l
b
a
r
'
)
;


 
 
 
 
c
l
a
s
s
 
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
 
e
x
t
e
n
d
s
 
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
t
h
i
s
-
>
l
i
v
e
s
i
t
e
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
S
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
A
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
m
e
n
u
b
a
r
I
m
a
g
e
s
A
r
r
a
y
 
=
 
$
t
h
i
s
-
>
g
e
t
M
e
n
u
b
a
r
I
m
a
g
e
s
A
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
i
m
a
g
e
S
i
z
e
 
=
 
'
s
m
a
l
l
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
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
S
i
z
e
 
=
 
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
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
E
x
t
e
n
s
i
o
n
 
=
 
'
p
n
g
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

